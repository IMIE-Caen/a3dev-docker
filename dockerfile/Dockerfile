FROM ruby:2.4
RUN apt-get update && apt-get install -y apt-transport-https
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN curl -sS https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN echo "deb https://deb.nodesource.com/node_8.x jessie main" | tee /etc/apt/sources.list.d/nodesource.list
RUN apt-get update && apt-get install -y yarn nodejs
RUN gem install --no-ri --no-rdoc bundler rails
