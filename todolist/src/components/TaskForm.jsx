import React, { useContext, useState } from 'react'
import { TaskContext } from '../contexts/TaskContextProvider'

export default function TaskForm() {
    const { dispatch } = useContext(TaskContext);
    const [todo, setTodo] = useState('');
    const [done, setDone] = useState(false)
    const handleSubmit = e => {
        e.preventDefault();
        dispatch({ type: 'ADD_TASK', task: {
            todo, done
        }});
        setTodo('');
        setDone(false);
    }

    return (
        <form onSubmit={handleSubmit}>
            <input type="text" id="todo" placeholder="Task todo" value={ todo }
                onChange={ e => setTodo(e.target.value)} required/>
            <label htmlFor="done">It is done?</label>
            <input type="radio" id="done" placeholder="" value={ done }
                onChange={ e => setDone(true)} required/>
            <input type="submit" value="Add task"/>
        </form>
    )
}
