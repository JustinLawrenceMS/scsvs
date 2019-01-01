# scsvs

Simple CSVs.

This is just a very basic script that
exports tables from MySQL as CSVs.  The
reason for this is that AWS blocks the
outfile keyword on their RDS servers
making all kinds of workarounds necessary.
This workaround uses fputcsv.

Not rocket science, but hopefully it helps
someone.
