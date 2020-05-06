<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from skinny/_sub_weblog.tpl */ ?>
<?php echo '
<div class="entry">
    <h2><a href="[[ link hrefonly=1 ]]">[[ title ]]</a></h2>
    <h3>[[ subtitle ]]</h3>
    [[ introduction ]]
    <p>[[ more ]]</p>
    <div class="meta" style=\'clear:both;\'>
        [[ user field=emailtonick ]] | [[ date format="%dayname% %day% %monthname% %year% - %hour12%&#58;%minute% %ampm%" ]] | 
        [[ permalink text="&para;" title="Permanent link to \'%title%\' in the archives" ]] |
        [[ category link=true ]] 
        [[ if ($entry.allow_comments == 1) ]]
            | [[commentlink]]
        [[ /if ]]
        [[ editlink format="Edit" prefix=" | " ]]
    </div>
    <div class="meta">
        [[ tags ]]
    </div>
</div>
'; ?>