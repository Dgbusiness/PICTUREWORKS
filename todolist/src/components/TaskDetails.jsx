import React, { useContext } from 'react'
import { TaskContext } from '../contexts/TaskContextProvider'

export default function TaskDetails({ task }) {
    const { dispatch } = useContext(TaskContext);

    return (
        <li className={task.done? 'lineT' : ''} onClick={ () => dispatch({ type: 'REMOVE_TASK', id: task.id })}>
            <div className="todo">{ task.todo }</div>
            <div className='done'>{ task.done? 'Done' : 'Not Done' }</div>
        </li>
    )
}
