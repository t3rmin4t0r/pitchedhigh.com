PWD=$(shell pwd)
PASSWORD=$(shell echo "Enter Password:" > /dev/stderr; read password; echo $$password)

upload:
	lftp -c "set ftp:list-options -a; \
	set ftp:ssl-allow no; \
	open ftp://pitched:$(PASSWORD)@pitchedhigh.com; \
	lcd $(PWD); \
	cd public_html/; \
	mirror --reverse \
       --verbose \
       --exclude .git \
	   --exclude portfolio/view/ \
	   --exclude portfolio/upload.mk"
