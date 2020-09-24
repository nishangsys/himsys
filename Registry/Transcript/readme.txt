1. Set all Degree conferred per program
2. Set all Grading systems
3. Set all sectors of Grading
4.Note that GPA must be show if attemped credit=credit Earned
5. Make sure department name is courses table is correctly spelled
6. Each time a courses is validated during normal session, the valid in  my_marks tbl=1
7. Each time courses are validated during resits its update valid=1 even in normal session where 
course code during resit=course code during normal session
8. GPA , degree confered appears only when valid in  my_marks=1 and when sem=1 or sem=2 are not when
sem=3 . So when count(valid) from  my_marks when valid=0 is zero then all courses are validated
9. Each time result slip is loaded, the system updates valid=1,0 depending if its a pass or fail
10. Always remember to Build a transcrip before print it. With this it will enable the system to 
see if the credit attempted=Earned for the GPA and others to appear on transcript
11. Each time course title did not appear , it is surely because the dept name in courses tbl is not
the same as that in the subjects tbl
12. When credit attempted is greater than Earned then you have not input a certain course status and credit 
value so the system give a random number
13. Course codes must be uniform over the years else you will have errors
14. Valid should be a new field with null content
15. HND should be a new field with null content

1.Add SRN to special tbl
2. update `courses` set departmet='STATE REGISTERED NURSING' WHERE departmet='STATE REGISTERED NURSE'
3. All second/resit sessions must have status of either R=Resit or P=Practicals
4.  All Certification Exams sessions must have status of either R=Resit or P=Practicals and Course Code
5. Resit Session for Public Health is 4 with status of either R OR P
6. Certification Mks semseter is 5 and all must have course code
7. Resit level and school year are not really required
8.All Course Code must be at most 6 characters e.g NUR 205
9.  If the student has done 3 years, all the years must have date and place of Birth Saved