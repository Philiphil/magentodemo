FROM debian:7

RUN useradd docker-user

RUN apt-get update && apt-get install --no-install-recommends -y \
apache2 \
php5=5.4\* \
php5-mhash \
php5-mcrypt \
php5-curl \
php5-cli \
php5-mysql \
php5-gd \
libapache2-mod-php5 \
&& rm -rf /var/lib/apt/lists/*

ADD etc/ /etc

RUN rm -rf /var/lock/apache2

RUN a2enmod rewrite

EXPOSE 80

VOLUME [ "/var/www/html" ]

WORKDIR /var/www/html

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
