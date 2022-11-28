## Docker Setup

 - docker build -t alemsbaja/backend-service .

 - docker tag backend-service alemsbaja/backend-service

 - docker push alemsbaja/backend-service:latest

 - docker run -d -p 8080:8080 docker/backend-service

 - docker-compose up -d

- docker-compose down

- helm install backend-service -f helm/values.yml -f helm/secrets.yml stable/lamp

- helm repo add stable https://charts.helm.sh/stable (deprecated)

- helm install backend-service -f helm/values.yml -f helm/secrets.yml stable/lamp

- kubectl get services -w

- helm delete laravel-kubernetes

- helm install nginx-ingress stable/nginx-ingress --set controller.publishService.enabled=true

- helm repo add stable https://github.com/kubernetes/ingress-nginx/tree/master/charts/ingress-nginx

- helm install backend-ingress ingress-nginx/ingress-nginx

