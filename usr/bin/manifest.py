#!/usr/bin/env python

import sys
import yaml

prefix = sys.argv[2]

with open(sys.argv[1], 'r') as manifest_file: manifest = yaml.load(manifest_file)

output =  prefix + 'VERSION='          + manifest['Cartridge-Version'] + '\n';
output += prefix + 'NGINX_VERSION='    + manifest['Versions'][0]       + '\n';
output += prefix + 'PHP_VERSION='      + manifest['Versions'][1]       + '\n';
output += prefix + 'COMPOSER_VERSION=' + manifest['Versions'][2];

print output