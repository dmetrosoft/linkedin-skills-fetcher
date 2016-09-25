"# linkedin-skills-fetcher" 
"# linkedin-skills-fetcher" 
FETCHER.HTML
should be run on computer with internet connection
FUNCTIONS
copier(alphabet[start])//send a query string and returns success if query was successfull
function name jsonpCallback(data)//data is the result which is passed to worker.php
 $.each(data, function (i, item) // json loop
var worker=JSON.stringify(item);
WORKER.PHP
should be placed in a server with php support
WORKERGET.php
read the data from worker.txt
sort the the data based on their skill name
remove duplicate skills
saved the unique skills in stage.txt
it is the file that fetcher.html pass data fetched to through ajax
#configuratation
 check in jsonpCallback(data),  change the ajax request to were you have the worker.php.
set interval shouid not be set to more than 5000 as to avoid heavy trafic on linkden, please take note
the fetecher consist of four input form level1,level2,level3 and level4
level1 var name is start
level2 var name is middle
level3 variable name is middle1
level4 var name is end
if you want to crawl out skills that begins with a-z, then only level1 should be set, the rest should be empty,
if you want aa -zz only level1 and level2 should be set, if you want aaa-zzz only level1, level2 should be set, e.t.c.
#After Fetching 
you can run the workerget.php from a web server
which will do his work and save the new skill in php
