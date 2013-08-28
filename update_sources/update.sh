#!/bin/bash

# must running in root of repository folder

echo "pwd = $(pwd)/$1/php/*"
echo "1 = $1"

# backup
BACKUP_DIR="`pwd`/../fhq.autobackups"

if [ ! -d $BACKUP_DIR ]; then
  mkdir $BACKUP_DIR
fi
FILE_TAR_GZ="$BACKUP_DIR/fhq_php_`date +%Y-%m-%d`.tar.gz"

if
echo "FILE_TAR_GZ = $FILE_TAR_GZ"
tar -zcvf $FILE_TAR_GZ $1

# copy files
FILES_PHP=$(echo "$(pwd)/php/*");
cp -rf $FILES_PHP $1





## removing old data

# if [ ! -d project_security_backup ];
# then
# mkdir project_security_backup
# fi

# if [ -d project_security ];
# then
# cp -rf project_security/* project_security_backup
# fi

# rm -rf project_security
# mkdir project_security

## coping new data
# FILE1=$(echo "$(pwd)/$1/php/*");

# cp -rf $FILE1 project_security

## configure
# chmod 777 -R project_security/*

#copy config file if exists
# if [ -f config.php ]; then
# cp -rf config.php project_security/config.php
# else
# cp project_security/config.php config.php
# fi

## restore scans
# if [ -d project_security -a -d project_security_backup/scans ];
# then
# rm -rf project_security/scans
# cp -rf project_security_backup/scans project_security/scans
# fi

## changes access to files
# chmod 777 -R project_security/*
