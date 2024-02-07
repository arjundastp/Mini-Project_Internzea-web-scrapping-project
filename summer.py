import requests
from bs4 import BeautifulSoup





r = requests.get('https://www.amazon.jobs/es/teams/internships-for-students')
# Parsing the HTML
soup = BeautifulSoup(r.content, 'html.parser')
print(r)
s = soup.find_all('h3', class_='job-title')
new=[]
for i in s:
    print(i.text)
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

for i in range(len(x)):
    
    aa=str(x[i])
    
    print(type(aa))
    
    