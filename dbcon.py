import pymysql

conn = pymysql.connect(host = 'localhost', user='root', password='111111', db='turorials', charset='utf8')

curs = conn.cursor()

sql = "select * from info"
curs.execute(sql)

rows = curs.fetchall()
print(rows)

con.close()
