import pymysql

conn = pymysql.connect(host = 'localhost', user='root', password='111111', db='tutorials', charset='utf8')

curs = conn.cursor()

sql = "select * from info"
curs.execute(sql)

rows = curs.fetchall()
print(rows)

conn.close()
