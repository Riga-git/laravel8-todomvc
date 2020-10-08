FROM gitpod/workspace-mysql

USER gitpod
RUN curl https://cli-assets.heroku.com/install-ubuntu.sh | sudo sh
