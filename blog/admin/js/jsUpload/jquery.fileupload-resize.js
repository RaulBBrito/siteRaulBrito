(function(factory){'use strict';if(typeof define==='function'&&define.amd){define(['jquery','load-image','canvas-to-blob','./jquery.fileupload-process'],factory);}else{factory(window.jQuery,window.loadImage);}}(function($,loadImage){'use strict';$.blueimp.fileupload.prototype.options.processQueue.unshift({action:'loadImage',fileTypes:'@loadImageFileTypes',maxFileSize:'@loadImageMaxFileSize',noRevoke:'@loadImageNoRevoke',disabled:'@disableImageLoad'},{action:'resizeImage',maxWidth:'@imageMaxWidth',maxHeight:'@imageMaxHeight',minWidth:'@imageMinWidth',minHeight:'@imageMinHeight',crop:'@imageCrop',disabled:'@disableImageResize'},{action:'saveImage',disabled:'@disableImageResize'},{action:'resizeImage',maxWidth:'@previewMaxWidth',maxHeight:'@previewMaxHeight',minWidth:'@previewMinWidth',minHeight:'@previewMinHeight',crop:'@previewCrop',canvas:'@previewAsCanvas',disabled:'@disableImagePreview'},{action:'setImage',name:'preview',disabled:'@disableImagePreview'});$.widget('blueimp.fileupload',$.blueimp.fileupload,{options:{loadImageFileTypes:/^image\/(gif|jpeg|png)$/,loadImageMaxFileSize:5000000,imageMaxWidth:1920,imageMaxHeight:1080,imageCrop:false,disableImageResize:true,previewMaxWidth:80,previewMaxHeight:80,previewCrop:false,previewAsCanvas:true},processActions:{loadImage:function(data,options){if(options.disabled){return data;}
var that=this,file=data.files[data.index],dfd=$.Deferred();if(($.type(options.maxFileSize)==='number'&&file.size>options.maxFileSize)||(options.fileTypes&&!options.fileTypes.test(file.type))||!loadImage(file,function(img){if(!img.src){return dfd.rejectWith(that,[data]);}
data.img=img;dfd.resolveWith(that,[data]);},options)){dfd.rejectWith(that,[data]);}
return dfd.promise();},resizeImage:function(data,options){options=$.extend({canvas:true},options);var img=(options.canvas&&data.canvas)||data.img,canvas;if(img&&!options.disabled){canvas=loadImage.scale(img,options);if(canvas&&(canvas.width!==img.width||canvas.height!==img.height)){data[canvas.getContext?'canvas':'img']=canvas;}}
return data;},saveImage:function(data,options){if(!data.canvas||options.disabled){return data;}
var that=this,file=data.files[data.index],name=file.name,dfd=$.Deferred(),callback=function(blob){if(!blob.name){if(file.type===blob.type){blob.name=file.name;}else if(file.name){blob.name=file.name.replace(/\..+$/,'.'+blob.type.substr(6));}}
data.files[data.index]=blob;dfd.resolveWith(that,[data]);};if(data.canvas.mozGetAsFile){callback(data.canvas.mozGetAsFile((/^image\/(jpeg|png)$/.test(file.type)&&name)||((name&&name.replace(/\..+$/,''))||'blob')+'.png',file.type));}else if(data.canvas.toBlob){data.canvas.toBlob(callback,file.type);}else{return data;}
return dfd.promise();},setImage:function(data,options){var img=data.canvas||data.img;if(img&&!options.disabled){data.files[data.index][options.name]=img;}
return data;}}});}));