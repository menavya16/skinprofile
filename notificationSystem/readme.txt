Setting up Crontab file reminder system:- 
-	Navigate to the folder you want to setup crontab in
-	Download sms.html in the same folder
-	Make a new file using vi filenameyoulike.sh, and insert 
  #!/bin/sh
  open -a "Google Chrome" sms.html;
-	Run `crontab -e`
-	Insert the following "MM HH DayOfTheMonth MonthOfTheYear DayOfTheWeek cd /filelocation && ./filenameyoulike.sh" 
