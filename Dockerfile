FROM php:8-cli

RUN apt-get update && apt-get install -y \
    pandoc \
    texlive-full \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /tmp/* /var/tmp/*

WORKDIR /app

COPY src/ .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080"]