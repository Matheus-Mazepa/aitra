
# Image
FROM node:lts-alpine

# Set up work directory
WORKDIR /var/www/client

RUN npm install -g http-server

# Configure host
ENV HOST 0.0.0.0

# Init command
CMD ["sh", "-c", "yarn install && yarn dev"]