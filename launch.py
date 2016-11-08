#/usr/bin/python3
#IP = 163.5.181.144
#Welcome to the server

from flask import Flask

import os
import sqlite3
app = Flask(__name__)

app.config.from_object(__name__)

app.config.update(dict(
    DATABASE=os.path.join(app.root_path, 'db.db'),
    SECRET_KEY='development key',
    USERNAME='admin',
    PASSWORD='admin'
    ))
app.config.from_envvar('FLASK_SETINGS', silent=True)

@app.route('/')
def hello_world():
    return ('penis la vanille')

@app.route('/img/<name>')
def check_img(image):
    pass


@app.route('/user/<name>', methods=['POST', 'GET'])
def login(name):
    return name
