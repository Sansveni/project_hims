import sqlite3
from sqlite3 import Error

def create_connection(db_file):
	"""create a database connection to an SQLite database"""
	try:
		conn = sqlite3.connect(db_file)
		print(sqlite3.version)
	except Error as e:
		print(e)
	finally:
		conn.close()

def create_table(conn, create_table_sql):
""" create a table from the create_table_sql statement
    :param conn: Connection object
    :param create_table_sql: a CREATE TABLE statement
    :return:
    """		
	try:
		c = conn.cursor()
		c.execute(create_table_sql)
	except Error as e:
		print(e)
	
def main():
	database = "pythonsqlite.db"
	
	
if __name__=='__main__':
	create_connection("pythonsqlite.db")

