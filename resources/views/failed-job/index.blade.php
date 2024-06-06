@extends('layouts.app')

@section('template_title')
    Failed Job
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Failed Job') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('failed-jobs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Uuid</th>
										<th>Connection</th>
										<th>Queue</th>
										<th>Payload</th>
										<th>Exception</th>
										<th>Failed At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($failedJobs as $failedJob)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $failedJob->uuid }}</td>
											<td>{{ $failedJob->connection }}</td>
											<td>{{ $failedJob->queue }}</td>
											<td>{{ $failedJob->payload }}</td>
											<td>{{ $failedJob->exception }}</td>
											<td>{{ $failedJob->failed_at }}</td>

                                            <td>
                                                <form action="{{ route('failed-jobs.destroy',$failedJob->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('failed-jobs.show',$failedJob->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('failed-jobs.edit',$failedJob->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $failedJobs->links() !!}
            </div>
        </div>
    </div>
@endsection
