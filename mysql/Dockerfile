FROM mysql:5.8

COPY docker-entrypoint.sh /usr/local/bin/
COPY ./sql /sql

ENTRYPOINT ["docker-entrypoint.sh"]

EXPOSE 3306
CMD ["mysqld"]
