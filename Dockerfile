FROM php:8.3-apache

ENV FLAG="TCTT2026{L3t5_S33_Wh3r3_Th3_R04d_T4k35_U5}"

COPY web/ /var/www/html/
COPY apache-fuzzy.conf /etc/apache2/conf-available/fuzzy-bay.conf

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod autoindex \
    && a2enconf fuzzy-bay

EXPOSE 80

CMD ["apache2-foreground"]