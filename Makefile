init:
	npm install ./frontend
	composer install --working-dir=./backend
run-frontend:
	npm start --prefix frontend
run-backend:
	symfony  --dir=./backend server:start