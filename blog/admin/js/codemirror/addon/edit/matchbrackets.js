(function(mod){if(typeof exports=="object"&&typeof module=="object")
mod(require("../../lib/codemirror"));else if(typeof define=="function"&&define.amd)
define(["../../lib/codemirror"],mod);else
mod(CodeMirror);})(function(CodeMirror){var ie_lt8=/MSIE \d/.test(navigator.userAgent)&&(document.documentMode==null||document.documentMode<8);var Pos=CodeMirror.Pos;var matching={"(":")>",")":"(<","[":"]>","]":"[<","{":"}>","}":"{<","<":">>",">":"<<"};function bracketRegex(config){return config&&config.bracketRegex||/[(){}[\]]/}
function findMatchingBracket(cm,where,config){var line=cm.getLineHandle(where.line),pos=where.ch-1;var afterCursor=config&&config.afterCursor
if(afterCursor==null)
afterCursor=/(^| )cm-fat-cursor($| )/.test(cm.getWrapperElement().className)
var re=bracketRegex(config)
var match=(!afterCursor&&pos>=0&&re.test(line.text.charAt(pos))&&matching[line.text.charAt(pos)])||re.test(line.text.charAt(pos+1))&&matching[line.text.charAt(++pos)];if(!match)return null;var dir=match.charAt(1)==">"?1:-1;if(config&&config.strict&&(dir>0)!=(pos==where.ch))return null;var style=cm.getTokenTypeAt(Pos(where.line,pos+1));var found=scanForBracket(cm,Pos(where.line,pos+(dir>0?1:0)),dir,style||null,config);if(found==null)return null;return{from:Pos(where.line,pos),to:found&&found.pos,match:found&&found.ch==match.charAt(0),forward:dir>0};}
function scanForBracket(cm,where,dir,style,config){var maxScanLen=(config&&config.maxScanLineLength)||10000;var maxScanLines=(config&&config.maxScanLines)||1000;var stack=[];var re=bracketRegex(config)
var lineEnd=dir>0?Math.min(where.line+maxScanLines,cm.lastLine()+1):Math.max(cm.firstLine()-1,where.line-maxScanLines);for(var lineNo=where.line;lineNo!=lineEnd;lineNo+=dir){var line=cm.getLine(lineNo);if(!line)continue;var pos=dir>0?0:line.length-1,end=dir>0?line.length:-1;if(line.length>maxScanLen)continue;if(lineNo==where.line)pos=where.ch-(dir<0?1:0);for(;pos!=end;pos+=dir){var ch=line.charAt(pos);if(re.test(ch)&&(style===undefined||cm.getTokenTypeAt(Pos(lineNo,pos+1))==style)){var match=matching[ch];if(match&&(match.charAt(1)==">")==(dir>0))stack.push(ch);else if(!stack.length)return{pos:Pos(lineNo,pos),ch:ch};else stack.pop();}}}
return lineNo-dir==(dir>0?cm.lastLine():cm.firstLine())?false:null;}
function matchBrackets(cm,autoclear,config){var maxHighlightLen=cm.state.matchBrackets.maxHighlightLineLength||1000;var marks=[],ranges=cm.listSelections();for(var i=0;i<ranges.length;i++){var match=ranges[i].empty()&&findMatchingBracket(cm,ranges[i].head,config);if(match&&cm.getLine(match.from.line).length<=maxHighlightLen){var style=match.match?"CodeMirror-matchingbracket":"CodeMirror-nonmatchingbracket";marks.push(cm.markText(match.from,Pos(match.from.line,match.from.ch+1),{className:style}));if(match.to&&cm.getLine(match.to.line).length<=maxHighlightLen)
marks.push(cm.markText(match.to,Pos(match.to.line,match.to.ch+1),{className:style}));}}
if(marks.length){if(ie_lt8&&cm.state.focused)cm.focus();var clear=function(){cm.operation(function(){for(var i=0;i<marks.length;i++)marks[i].clear();});};if(autoclear)setTimeout(clear,800);else return clear;}}
function doMatchBrackets(cm){cm.operation(function(){if(cm.state.matchBrackets.currentlyHighlighted){cm.state.matchBrackets.currentlyHighlighted();cm.state.matchBrackets.currentlyHighlighted=null;}
cm.state.matchBrackets.currentlyHighlighted=matchBrackets(cm,false,cm.state.matchBrackets);});}
CodeMirror.defineOption("matchBrackets",false,function(cm,val,old){if(old&&old!=CodeMirror.Init){cm.off("cursorActivity",doMatchBrackets);if(cm.state.matchBrackets&&cm.state.matchBrackets.currentlyHighlighted){cm.state.matchBrackets.currentlyHighlighted();cm.state.matchBrackets.currentlyHighlighted=null;}}
if(val){cm.state.matchBrackets=typeof val=="object"?val:{};cm.on("cursorActivity",doMatchBrackets);}});CodeMirror.defineExtension("matchBrackets",function(){matchBrackets(this,true);});CodeMirror.defineExtension("findMatchingBracket",function(pos,config,oldConfig){if(oldConfig||typeof config=="boolean"){if(!oldConfig){config=config?{strict:true}:null}else{oldConfig.strict=config
config=oldConfig}}
return findMatchingBracket(this,pos,config)});CodeMirror.defineExtension("scanForBracket",function(pos,dir,style,config){return scanForBracket(this,pos,dir,style,config);});});