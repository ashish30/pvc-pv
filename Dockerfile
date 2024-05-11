FROM php
WORKDIR /my-app
COPY . /my-app
EXPOSE 3001
CMD ["php" , "-S" ,"0.0.0.0:3001"]

