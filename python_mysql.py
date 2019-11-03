import mysql.connector

mydb=mysql.connector.connect(
host="localhost",
user="root",
passwd="",
database="python_db"
)

mycursor=mydb.cursor()
sql="INSERT INTO `users`(`name`, `pass`) VALUES ('aa','bb')"
mycursor.execute(sql)
print(mycursor.rowcount)
mydb.commit()
