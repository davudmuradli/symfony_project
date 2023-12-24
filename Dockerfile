FROM ubuntu:latest
LABEL authors="Rafig"

ENTRYPOINT ["top", "-b"]