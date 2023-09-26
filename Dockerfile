FROM babiker.azurecr.io/phpbase
WORKDIR /bab
RUN echo $(date +%s) >> phpapp.txt
COPY ./app .
CMD ["php", "./index.php"]