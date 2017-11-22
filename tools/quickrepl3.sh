#! /bin/bash
# quick replace a string with another of the found files.
# use carefully.

case $# in
	0) { echo "Usage: $0 files" 1>&2 ; exit 1 ; }
esac

re=" <a href=\"\#top\"><font color=\"<?php echo \$op_color\[\"core_color_18\"\] ?>\"><?php echo __('top') ?><\/font><\/a> \/"
replace=" <a href=\"#top\" accesskey=\"2\"><font color=\"<?php echo \$op_color[\"core_color_18\"] ?>\">2. <?php echo __('top') ?><\/font><\/a> \/"
files=$1

for i in `find . -name "$files" -exec grep -l "$re" '{}' ';' |grep -v '~$' |grep -v '/cache/'|grep -v '\.bak'`
do
echo "replacing $re with $replace in $i ..."
echo -ne '1,$s/'"$re"'/'"$replace"'/g\nwq\n' | sudo ed "$i"
done
