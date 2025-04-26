FROM php:8.0-apache

# ติดตั้งและเปิดใช้งานส่วนขยาย mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# อัปเดตและอัปเกรดแพ็กเกจ
RUN apt-get update && apt-get upgrade -y && apt-get clean && rm -rf /var/lib/apt/lists/*
