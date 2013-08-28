import sys
import random
import os

# Generates a csv file based on all jpg images in a directory.
# Usage: python csv_generator.py [directory name] [Prefix for item name]

if __name__ == '__main__':
    dirpath = sys.argv[1]
    name = sys.argv[2]

    FILE = open(name + '.csv','w')
    FILE.write('Name,Price,Img,ID\n')
    i = 1
    for s in os.listdir(dirpath):
        if '.jpg' in s or '.JPG' in s:
            FILE.write(name + str(i) 
                       + ',' + str(random.randint(1,1000000))  
                       + ',' + s[:len(s[1])-5] 
                       + ',' + str(i) + '\n')
            i += 1

    FILE.close()
