To work with certificates:
1. Install `mkcert` locally by instructions from https://github.com/FiloSottile/mkcert


To recreate root certificates:
1. Run `mkcert -install`
2. Run `mkcert -CAROOT` to find folder where RootCA was generated
3. Copy both files from that directory to `./cert` dir
4. Instruct all your team to install `rootCA.pem` in their operating systems to list of trusted certificate issuers

To create certificates for local site:
1. Generate new certs: `mkcert -key-file ./cert/fw-io.key.pem -cert-file ./cert/fw-io.pem local.fluidweb.io *.fluidweb.io`

To run HTTPS project:
1. In OS: `npm run dev-https`
2. In Docker: `docker-compose up next`