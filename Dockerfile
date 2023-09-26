FROM babiker.azurecr.io/phpbase
WORKDIR /bab
RUN echo $(date +%s) >> phpscan.txt
COPY ./app .
CMD ["php", "./index.php"]