<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Journal;

class PatientJournal
{

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        $journal = $request->id;
        $var = Journal::find($journal);

        if ($var == null) {
            abort (401); 
        }

        if ($user->id != $var->user_id) {
            abort (401); 
        } 
        
        return $next($request);
    }
}
