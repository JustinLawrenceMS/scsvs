# scsvs
<b>This is a PHP script that runs on Apache2 (nginx is probably fine)
and it provides an interface for MySQL csv exports.
</b>

Simple CSVs.

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

Of course, AWS still allows export in tab-delimited format.

Not rocket science, but hopefully it helps
someone.

This was tested on PHP 7.2.13 and MySQL 5.6.23.

It was tested successfully on xampp and LAMP.
