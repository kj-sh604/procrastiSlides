FROM php:8.5.1-cli

RUN apt update && apt install -y \
    pandoc \
    texlive \
    texlive-latex-extra \
    texlive-fonts-extra \
    texlive-lang-chinese \
    texlive-lang-japanese \
    texlive-lang-all \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app

COPY src/ .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080"]