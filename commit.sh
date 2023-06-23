#!/bin/bash

echo "Checking for newer files."
git pull

git add --all .

echo "Commit Comment"
read input
git commit -S -m "$input"

git push -u origin main

echo "Done"
