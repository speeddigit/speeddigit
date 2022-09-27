# Default github account: default
Host github.com
   HostName github.com
   IdentityFile ~/.ssh/id_rsa
   IdentitiesOnly yes
   
# Other github account: other
Host github.com-other
   HostName github.com
   IdentityFile ~/.ssh/other_private_key
   IdentitiesOnly yes