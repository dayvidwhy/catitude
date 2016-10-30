from flask import Flask, render_template, url_for

app = Flask(__name__)


@app.route('/')
def homepage(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('index.html', style=st)


@app.route('/about')
def about(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('about.html', style=st)


@app.route('/testimonials')
def testimonials(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('testimonials.html', style=st)


@app.route('/gallery')
def gallery(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('gallery.html', style=st)


@app.route('/symptoms')
def symptoms(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('symptoms.html', style=st)


@app.route('/booking')
def booking(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('booking.html', style=st)


@app.route('/contact')
def contact(js=None, style=None):
    st = url_for('static', filename='css/style.css')
    return render_template('contact.html', style=st)

if __name__ == '__main__':
    app.run()
