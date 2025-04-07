FROM php:8.0.0-apache

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y libzip-dev zlib1g-dev && \
    docker-php-ext-install mysqli zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/*
