SELECT * FROM stdattendance 
WHERE date 
BETWEEN STR_TO_DATE('31-05-2018', '%d-%m-%Y') 
        AND STR_TO_DATE('01-06-2018', '%d-%m-%Y') and std_id='2';