from flask import Flask,render_template,request 
import requests
from bs4 import BeautifulSoup

#from datetime import datetime
import time 
import mysql.connector
app=Flask(__name__)
@app.route("/")
@app.route("/home")
def home():
    return render_template('index.html')
@app.route("/result",methods=["GET","POST"])

def result():
    cnx = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='miniproject'
    )
    cursor = cnx.cursor()     





    new=[]
    # Making a GET request
    r = requests.get('https://trainings.internshala.com/?utm_source=Google-Search&utm_campaign=CT-Search-Generic-Internship-Sep22&utm_adgroup=Students&utm_locationinterest=&utm_searchkeyword=internship%20for%20btech%20students&utm_keywordid=kwd-305177163109&gclid=Cj0KCQjw7uSkBhDGARIsAMCZNJtNR8RfDYLCjc1oSYgTv_NWpACCawGX06gAhZSh1eo5i3zJ-caUWfgaAnGbEALw_wcB')
    # Parsing the HTML
    soup = BeautifulSoup(r.content, 'html.parser')

    #soup fetching 
    s = soup.find_all('h4', class_='name')
    for i in s :
        #print(list(i))
        data=(list(i))
        #   print(tuple(data))
        #print(data)

        new.append(tuple(data)) 
    final=[]
    #print(new)
    for a in new:
        for i in a:
            #print(i)
            final.append(i)

    x=tuple(final)

    c1=time.ctime()
    s1='From internshala '
    #query1="INSERT INTO sample(name,date)VALUES('{}','{}')".format(c1)


    query1="TRUNCATE internshala"
    cursor.execute(query1)

    for i in range(len(x)):
    
        aa=str(x[i])
        query = "INSERT INTO  internshala(name,datetime) VALUES('{}','{}')".format(aa,c1)
    
        #print(type(aa))
    
        cursor.execute(query)
    cnx.commit()
    
    return render_template("index.html")


#print(list(new))  







    cursor.close()
    cnx.close()

@app.route("/summer",methods=["GET","POST"])
def summer():
    


    cnx = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='miniproject'
        )
    cursor = cnx.cursor()
    r = requests.get('https://www.coursera.org/courses?query=computer')
    # Parsing the HTML
    soup = BeautifulSoup(r.content, 'html.parser')
    #print(r)
    s = soup.find_all('h2', class_='cds-119 css-h1jogs cds-121')
    new=[]
    for i in s:
        #print(i.text)
        data=(list(i))
        #print(tuple(data))
        #print(data)

        new.append(tuple(data)) 
    final=[]
    #print(new)
    for a in new:
        for i in a:
            #print(i)
            final.append(i)

    x=tuple(final)
    #print(x)
    c1=time.ctime()
    query1="TRUNCATE summer"
    cursor.execute(query1)
    for i in range(len(x)):
    
        aa=str(x[i])
        query = "INSERT INTO summer(name,datetime) VALUES('{}','{}')".format(aa,c1)
        #print(type(aa))
        cursor.execute(query,aa)
        cnx.commit()
    return render_template("index.html")




    cursor.close()
    cnx.close()
  
    
@app.route("/google",methods=["GET","POST"])
def google():
    


    cnx = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='miniproject'
        )
    cursor = cnx.cursor()
    r = requests.get('https://www.google.com/about/careers/applications/jobs/results/')
    # Parsing the HTML
    soup = BeautifulSoup(r.content, 'html.parser')
    #print(r)
    s = soup.find_all('h3', class_='QJPWVe')
    new=[]
    for i in s:
        #print(i.text)
        data=(list(i))
        #print(tuple(data))
        #print(data)

        new.append(tuple(data)) 
    final=[]
    #print(new)
    for a in new:
        for i in a:
            #print(i)
            final.append(i)

    x=tuple(final)
    #print(x)
    c1=time.ctime()
    query1="TRUNCATE google"
    cursor.execute(query1)
    for i in range(len(x)):
    
        aa=str(x[i])
        query = "INSERT INTO google(name,datetime) VALUES('{}','{}')".format(aa,c1)
        #print(type(aa))
        cursor.execute(query,aa)
        cnx.commit()
    return render_template("index.html")
  


if(__name__=='__main__'):
    app.run(debug=True,port=5001) 