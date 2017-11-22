#! /bin/bash
# quick replace a string with another of the found files.
# use carefully.

case $# in
	0|1|2) { echo "Usage: $0 re replace files" 1>&2 ; exit 1 ; }
esac

re=$1
replace=$2
files=$3

for i in `find . -name "$files" -exec grep -l "$re" '{}' ';' |grep -v '~$' |grep -v '/cache/'|grep -v '\.bak'`
do
echo "replacing $re with $replace in $i ..."
echo -ne '1,$s/'"$re"'/'"$replace"'/g\nwq\n' | sudo ed "$i"
done
