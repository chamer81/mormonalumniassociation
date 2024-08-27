#!/bin/bash

for f in mormonalumniassociation.org/public/books/* ; do
  echo $f
  sed -i 's|http://mainstreetplaza|https://mainstreetplaza|g' $f/main_page.php
done
