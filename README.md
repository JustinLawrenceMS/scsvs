# scsvs
This is a PHP script that runs on Apache2 (nginx is probably fine)
and it provides an interface for MySQL csv exports.

<b>Simple CSVs.
</b>
First, a word of caution.  This script is 
intended to be run locally.  If you put 
this script on a production server you
are essentially asking for company.
NOT SAFE FOR PRODUCTION.

This is just a very basic script that
exports tables from MySQL as CSVs.  The
reason for this is that AWS blocks the
outfile keyword on their RDS servers
making all kinds of workarounds necessary.
This workaround uses fputcsv.

FYI, AWS still allows export in tab-delimited format.
phpMyAdmin has great export options depending on the filesize 
of your dataset, but again, working locally is more secure.

Future goal is to add data chunking. It already worked on a 40mb table with 8g memory.  It exhausted memory on a 250mb table.


I left placeholders for the programmer to add their own
embelishments.

Hopefully this helps
someone.

It was tested on PHP 7.2.13 and MySQL 5.6.23.

It was tested successfully on xampp and LAMP.
