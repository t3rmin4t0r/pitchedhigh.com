SIZE=x240

all:
	find -name \*.pdf -print0  | xargs -P 4 --null -IXX -n1 convert -thumbnail $(SIZE) XX[0] XX.png
	for each in *.pdf.png; do mv -v "$$each" "$$(echo "$$each" | sed "s/\.pdf//")" ; done
	for each in *.jpg; do convert -thumbnail $(SIZE) "$$each" "$$(basename "$$each" .jpg).png" ; done
	python thumbnails.py > thumbnails.js
	php index.tpl

optimize:
	find -name \*.png -print0 | xargs -P 10 -n 1 --null  pngcrush -e -crush.png -brute
	for each in *-crush.png ; do mv -v "$$each" "$$(echo "$$each" | sed "s/-crush//")" ; done
