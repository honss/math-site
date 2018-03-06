from bs4 import BeautifulSoup as bs
import urllib
import re
import csv
import datetime
import time

#get count
r = urllib.urlopen('http://aidandns.asuscomm.com:8081/server-status').read()
soup = bs(r, 'html5lib')
paragraphs = soup.find_all('dt')
sentence = paragraphs[9]
count = int(re.search(r'\d+', sentence.string).group())


#open file
output = []
file = open('accesses.csv')
reader = csv.reader(file)

for row in reader:
    output.append(row)

file.close()
################################### append a list to output here
output.append([str(datetime.date.today()), count])
###################################
#open to write
outputfile = open('accesses.csv', 'w')
outputobject = csv.writer(outputfile)
for row in output:
    outputobject.writerow(row)
outputfile.close()
