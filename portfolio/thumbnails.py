from PIL import Image
from glob import glob
import json
import os.path

order = glob('*.png')
if(os.path.exists("thumbnails.order")):
	order = [l.strip() for l in open("thumbnails.order")]

images = [((f,)+Image.open(f).size) for f in order];
l = []
for (f, w,h) in images:
	l.append({"thumbnail" : f, "w" : w, "h" : h});

print "var thumbnails = %s;" % json.dumps(l)
