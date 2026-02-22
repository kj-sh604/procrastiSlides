FROM php:8-cli

RUN DEBIAN_FRONTEND=noninteractive apt-get update && apt-get install -y --no-install-recommends \
    pandoc \
    texlive-full \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /tmp/* /var/tmp/* \
    && rm -rf /usr/share/texlive/texmf-dist/doc \
    && rm -rf /usr/share/texlive/texmf-dist/source \
    && rm -rf /usr/share/texlive/texmf-dist/fonts/source \
    && rm -rf /usr/share/texlive/texmf-dist/fonts/afm \
    && rm -rf /usr/share/texlive/texmf-dist/tex/context \
    && rm -rf /usr/share/texlive/texmf-dist/tex/xmltex \
    && rm -rf /usr/share/texlive/texmf-dist/tex/jadetex \
    && rm -rf /usr/share/texlive/texmf-dist/tex/omega \
    && rm -rf /usr/share/texlive/texmf-dist/metapost \
    && rm -rf /usr/share/texlive/texmf-dist/asymptote \
    && rm -rf /usr/share/texlive/texmf-dist/metafont \
    && rm -rf /usr/share/texlive/texmf-dist/tex/texinfo \
    && rm -rf /usr/share/texlive/texmf-dist/bibtex/bib \
    && rm -rf /usr/share/texlive/tlpkg \
    && find /usr/share/locale -mindepth 1 -maxdepth 1 ! -name 'en*' -type d -print0 | xargs -0 rm -rf \
    && rm -rf /usr/share/man/* \
    && rm -rf /usr/share/doc/*

WORKDIR /app

COPY src/ .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080"]