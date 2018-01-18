from mod_python import apache

def handler(req):
  req.content_type = "text/html"
    req.write("<html>\n")
    req.write("<body>\n")
    req.write("\t<h1>Hello, mod_python!</h1>\n")
    req.write("</body>\n")
    req.write("</html>\n")
    
