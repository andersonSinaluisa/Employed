import React from 'react';

export const Alert =({text,tipo})=>{
    return(
        <div class= {`alert alert-${tipo} alert-dismissible fade show`} role="alert">
        {text}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    )
}