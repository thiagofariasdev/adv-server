import sys
from math import sin, cos, sqrt, atan2, radians

# approximate radius of earth in km
R = 6373.0

pax = float(sys.argv[1])
pay = float(sys.argv[2])
pbx = float(sys.argv[3])
pby = float(sys.argv[4])
lat1 = radians(pax)
lon1 = radians(pay)
lat2 = radians(pbx)
lon2 = radians(pby)

dlon = lon2 - lon1
dlat = lat2 - lat1

a = sin(dlat / 2)**2 + cos(lat1) * cos(lat2) * sin(dlon / 2)**2
c = 2 * atan2(sqrt(a), sqrt(1 - a))

distance = R * c

print(distance)